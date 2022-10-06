# Onfido\DefaultApi

All URIs are relative to https://api.eu.onfido.com/v3.5.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReport()**](DefaultApi.md#cancelReport) | **POST** /reports/{report_id}/cancel | This endpoint is for cancelling individual paused reports.
[**createApplicant()**](DefaultApi.md#createApplicant) | **POST** /applicants | Create Applicant
[**createCheck()**](DefaultApi.md#createCheck) | **POST** /checks | Create a check
[**createWebhook()**](DefaultApi.md#createWebhook) | **POST** /webhooks | Create a webhook
[**deleteWebhook()**](DefaultApi.md#deleteWebhook) | **DELETE** /webhooks/{webhook_id} | Delete a webhook
[**destroyApplicant()**](DefaultApi.md#destroyApplicant) | **DELETE** /applicants/{applicant_id} | Delete Applicant
[**downloadDocument()**](DefaultApi.md#downloadDocument) | **GET** /documents/{document_id}/download | Download a documents raw data
[**downloadLivePhoto()**](DefaultApi.md#downloadLivePhoto) | **GET** /live_photos/{live_photo_id}/download | Download live photo
[**downloadLiveVideo()**](DefaultApi.md#downloadLiveVideo) | **GET** /live_videos/{live_video_id}/download | Download live video
[**editWebhook()**](DefaultApi.md#editWebhook) | **PUT** /webhooks/{webhook_id} | Edit a webhook
[**findAddresses()**](DefaultApi.md#findAddresses) | **GET** /addresses/pick | Search for addresses by postcode
[**findApplicant()**](DefaultApi.md#findApplicant) | **GET** /applicants/{applicant_id} | Retrieve Applicant
[**findCheck()**](DefaultApi.md#findCheck) | **GET** /checks/{check_id} | Retrieve a Check
[**findDocument()**](DefaultApi.md#findDocument) | **GET** /documents/{document_id} | A single document can be retrieved by calling this endpoint with the document’s unique identifier.
[**findLivePhoto()**](DefaultApi.md#findLivePhoto) | **GET** /live_photos/{live_photo_id} | Retrieve live photo
[**findLiveVideo()**](DefaultApi.md#findLiveVideo) | **GET** /live_videos/{live_video_id} | Retrieve live video
[**findReport()**](DefaultApi.md#findReport) | **GET** /reports/{report_id} | A single report can be retrieved using this endpoint with the corresponding unique identifier.
[**findWebhook()**](DefaultApi.md#findWebhook) | **GET** /webhooks/{webhook_id} | Retrieve a Webhook
[**frameLiveVideo()**](DefaultApi.md#frameLiveVideo) | **GET** /live_videos/{live_video_id}/frame | Download live video frame
[**generateSdkToken()**](DefaultApi.md#generateSdkToken) | **POST** /sdk_token | Generate a SDK token
[**listApplicants()**](DefaultApi.md#listApplicants) | **GET** /applicants | List Applicants
[**listChecks()**](DefaultApi.md#listChecks) | **GET** /checks | Retrieve Checks
[**listDocuments()**](DefaultApi.md#listDocuments) | **GET** /documents | List documents
[**listLivePhotos()**](DefaultApi.md#listLivePhotos) | **GET** /live_photos | List live photos
[**listLiveVideos()**](DefaultApi.md#listLiveVideos) | **GET** /live_videos | List live videos
[**listReports()**](DefaultApi.md#listReports) | **GET** /reports | All the reports belonging to a particular check can be listed from this endpoint.
[**listWebhooks()**](DefaultApi.md#listWebhooks) | **GET** /webhooks | List webhooks
[**restoreApplicant()**](DefaultApi.md#restoreApplicant) | **POST** /applicants/{applicant_id}/restore | Restore Applicant
[**resumeCheck()**](DefaultApi.md#resumeCheck) | **POST** /checks/{check_id}/resume | Resume a Check
[**resumeReport()**](DefaultApi.md#resumeReport) | **POST** /reports/{report_id}/resume | This endpoint is for resuming individual paused reports.
[**updateApplicant()**](DefaultApi.md#updateApplicant) | **PUT** /applicants/{applicant_id} | Update Applicant
[**uploadDocument()**](DefaultApi.md#uploadDocument) | **POST** /documents | Upload a document
[**uploadLivePhoto()**](DefaultApi.md#uploadLivePhoto) | **POST** /live_photos | Upload live photo


## `cancelReport()`

```php
cancelReport($report_id)
```

This endpoint is for cancelling individual paused reports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string

try {
    $apiInstance->cancelReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApplicant()`

```php
createApplicant($applicant_request): \Onfido\Model\ApplicantResponse
```

Create Applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_request = new \Onfido\Model\ApplicantRequest(); // \Onfido\Model\ApplicantRequest

try {
    $result = $apiInstance->createApplicant($applicant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createApplicant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_request** | [**\Onfido\Model\ApplicantRequest**](../Model/ApplicantRequest.md)|  |

### Return type

[**\Onfido\Model\ApplicantResponse**](../Model/ApplicantResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCheck()`

```php
createCheck($check_request): \Onfido\Model\CheckResponse
```

Create a check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_request = new \Onfido\Model\CheckRequest(); // \Onfido\Model\CheckRequest

try {
    $result = $apiInstance->createCheck($check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_request** | [**\Onfido\Model\CheckRequest**](../Model/CheckRequest.md)|  |

### Return type

[**\Onfido\Model\CheckResponse**](../Model/CheckResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebhook()`

```php
createWebhook($webhook_request): \Onfido\Model\WebhookResponse
```

Create a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_request = new \Onfido\Model\WebhookRequest(); // \Onfido\Model\WebhookRequest

try {
    $result = $apiInstance->createWebhook($webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_request** | [**\Onfido\Model\WebhookRequest**](../Model/WebhookRequest.md)|  |

### Return type

[**\Onfido\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($webhook_id)
```

Delete a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string

try {
    $apiInstance->deleteWebhook($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyApplicant()`

```php
destroyApplicant($applicant_id)
```

Delete Applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string

try {
    $apiInstance->destroyApplicant($applicant_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->destroyApplicant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadDocument()`

```php
downloadDocument($document_id): \SplFileObject
```

Download a documents raw data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->downloadDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**|  |

### Return type

**\SplFileObject**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadLivePhoto()`

```php
downloadLivePhoto($live_photo_id): \SplFileObject
```

Download live photo

Live photos are downloaded using this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_photo_id = 'live_photo_id_example'; // string | The live photo’s unique identifier.

try {
    $result = $apiInstance->downloadLivePhoto($live_photo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadLivePhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_photo_id** | **string**| The live photo’s unique identifier. |

### Return type

**\SplFileObject**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadLiveVideo()`

```php
downloadLiveVideo($live_video_id): \SplFileObject
```

Download live video

Live videos are downloaded using this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_video_id = 'live_video_id_example'; // string | The live video’s unique identifier.

try {
    $result = $apiInstance->downloadLiveVideo($live_video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadLiveVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_video_id** | **string**| The live video’s unique identifier. |

### Return type

**\SplFileObject**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editWebhook()`

```php
editWebhook($webhook_id, $webhook_request): \Onfido\Model\WebhookResponse
```

Edit a webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_request = new \Onfido\Model\WebhookRequest(); // \Onfido\Model\WebhookRequest

try {
    $result = $apiInstance->editWebhook($webhook_id, $webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**|  |
 **webhook_request** | [**\Onfido\Model\WebhookRequest**](../Model/WebhookRequest.md)|  |

### Return type

[**\Onfido\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAddresses()`

```php
findAddresses($postcode): \Onfido\Model\AddressesList
```

Search for addresses by postcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postcode = 'postcode_example'; // string

try {
    $result = $apiInstance->findAddresses($postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postcode** | **string**|  |

### Return type

[**\Onfido\Model\AddressesList**](../Model/AddressesList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findApplicant()`

```php
findApplicant($applicant_id): \Onfido\Model\ApplicantResponse
```

Retrieve Applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string

try {
    $result = $apiInstance->findApplicant($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findApplicant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

[**\Onfido\Model\ApplicantResponse**](../Model/ApplicantResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCheck()`

```php
findCheck($check_id): \Onfido\Model\CheckResponse
```

Retrieve a Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_id = 'check_id_example'; // string

try {
    $result = $apiInstance->findCheck($check_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |

### Return type

[**\Onfido\Model\CheckResponse**](../Model/CheckResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findDocument()`

```php
findDocument($document_id): \Onfido\Model\DocumentResponse
```

A single document can be retrieved by calling this endpoint with the document’s unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string

try {
    $result = $apiInstance->findDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**|  |

### Return type

[**\Onfido\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findLivePhoto()`

```php
findLivePhoto($live_photo_id): \Onfido\Model\LivePhotoResponse
```

Retrieve live photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_photo_id = 'live_photo_id_example'; // string | The live photo’s unique identifier.

try {
    $result = $apiInstance->findLivePhoto($live_photo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findLivePhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_photo_id** | **string**| The live photo’s unique identifier. |

### Return type

[**\Onfido\Model\LivePhotoResponse**](../Model/LivePhotoResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findLiveVideo()`

```php
findLiveVideo($live_video_id): \Onfido\Model\LiveVideo
```

Retrieve live video

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_video_id = 'live_video_id_example'; // string | The live video’s unique identifier.

try {
    $result = $apiInstance->findLiveVideo($live_video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findLiveVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_video_id** | **string**| The live video’s unique identifier. |

### Return type

[**\Onfido\Model\LiveVideo**](../Model/LiveVideo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findReport()`

```php
findReport($report_id): \Onfido\Model\Report
```

A single report can be retrieved using this endpoint with the corresponding unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string

try {
    $result = $apiInstance->findReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**|  |

### Return type

[**\Onfido\Model\Report**](../Model/Report.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findWebhook()`

```php
findWebhook($webhook_id): \Onfido\Model\WebhookResponse
```

Retrieve a Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string

try {
    $result = $apiInstance->findWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**|  |

### Return type

[**\Onfido\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `frameLiveVideo()`

```php
frameLiveVideo($live_video_id): \SplFileObject
```

Download live video frame

Instead of the whole video, a single frame can be downloaded using this endpoint. Returns the binary data representing the frame.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_video_id = 'live_video_id_example'; // string | The live video’s unique identifier.

try {
    $result = $apiInstance->frameLiveVideo($live_video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->frameLiveVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_video_id** | **string**| The live video’s unique identifier. |

### Return type

**\SplFileObject**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSdkToken()`

```php
generateSdkToken($sdk_token_request): \Onfido\Model\SdkTokenResponse
```

Generate a SDK token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sdk_token_request = new \Onfido\Model\SdkTokenRequest(); // \Onfido\Model\SdkTokenRequest

try {
    $result = $apiInstance->generateSdkToken($sdk_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateSdkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sdk_token_request** | [**\Onfido\Model\SdkTokenRequest**](../Model/SdkTokenRequest.md)|  |

### Return type

[**\Onfido\Model\SdkTokenResponse**](../Model/SdkTokenResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApplicants()`

```php
listApplicants($page, $per_page, $include_deleted): \Onfido\Model\ApplicantsList
```

List Applicants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page to return. The first page is `page=1`
$per_page = 20; // int | The number of objects per page.
$include_deleted = false; // bool | Whether to also include applicants scheduled for deletion.

try {
    $result = $apiInstance->listApplicants($page, $per_page, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listApplicants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to return. The first page is &#x60;page&#x3D;1&#x60; | [optional] [default to 1]
 **per_page** | **int**| The number of objects per page. | [optional] [default to 20]
 **include_deleted** | **bool**| Whether to also include applicants scheduled for deletion. | [optional] [default to false]

### Return type

[**\Onfido\Model\ApplicantsList**](../Model/ApplicantsList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listChecks()`

```php
listChecks($applicant_id): \Onfido\Model\ChecksList
```

Retrieve Checks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string

try {
    $result = $apiInstance->listChecks($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listChecks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

[**\Onfido\Model\ChecksList**](../Model/ChecksList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDocuments()`

```php
listDocuments($applicant_id): \Onfido\Model\DocumentsList
```

List documents

All documents belonging to an applicant can be listed from this endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string

try {
    $result = $apiInstance->listDocuments($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

[**\Onfido\Model\DocumentsList**](../Model/DocumentsList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLivePhotos()`

```php
listLivePhotos($applicant_id): \Onfido\Model\LivePhotosList
```

List live photos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string | The id of the applicant the live photos belong to.

try {
    $result = $apiInstance->listLivePhotos($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLivePhotos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**| The id of the applicant the live photos belong to. |

### Return type

[**\Onfido\Model\LivePhotosList**](../Model/LivePhotosList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLiveVideos()`

```php
listLiveVideos($applicant_id): \Onfido\Model\LiveVideosList
```

List live videos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string | The id of the applicant the live videos belong to.

try {
    $result = $apiInstance->listLiveVideos($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listLiveVideos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**| The id of the applicant the live videos belong to. |

### Return type

[**\Onfido\Model\LiveVideosList**](../Model/LiveVideosList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReports()`

```php
listReports($check_id): \Onfido\Model\ReportsList
```

All the reports belonging to a particular check can be listed from this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_id = 'check_id_example'; // string

try {
    $result = $apiInstance->listReports($check_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |

### Return type

[**\Onfido\Model\ReportsList**](../Model/ReportsList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks(): \Onfido\Model\WebhooksList
```

List webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Onfido\Model\WebhooksList**](../Model/WebhooksList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreApplicant()`

```php
restoreApplicant($applicant_id)
```

Restore Applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string

try {
    $apiInstance->restoreApplicant($applicant_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->restoreApplicant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeCheck()`

```php
resumeCheck($check_id)
```

Resume a Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_id = 'check_id_example'; // string

try {
    $apiInstance->resumeCheck($check_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->resumeCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeReport()`

```php
resumeReport($report_id)
```

This endpoint is for resuming individual paused reports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string

try {
    $apiInstance->resumeReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->resumeReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApplicant()`

```php
updateApplicant($applicant_id, $applicant_request): \Onfido\Model\ApplicantResponse
```

Update Applicant

Allows updating of an applicant’s information before any checks are created. - Partial updates - Addresses and ID numbers present will replace existing ones - Same applicant validations to create applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string
$applicant_request = new \Onfido\Model\ApplicantRequest(); // \Onfido\Model\ApplicantRequest

try {
    $result = $apiInstance->updateApplicant($applicant_id, $applicant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateApplicant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **applicant_request** | [**\Onfido\Model\ApplicantRequest**](../Model/ApplicantRequest.md)|  |

### Return type

[**\Onfido\Model\ApplicantResponse**](../Model/ApplicantResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocument()`

```php
uploadDocument($applicant_id, $type, $file, $side, $issuing_country, $validate_image_quality, $location): \Onfido\Model\DocumentResponse
```

Upload a document

Documents are uploaded using this endpoint. Along with the file upload the relevant document type must be specified. Documents must be uploaded as a multipart form. The valid file types are: jpg, png and pdf. The file size must be between 2KB and 3MB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string | The ID of the applicant whose document is being uploaded.
$type = 'type_example'; // string | The type of document.
$file = "/path/to/file.txt"; // \SplFileObject | The file to be uploaded.
$side = 'side_example'; // string | Either the `front` or `back` of the document.
$issuing_country = 'issuing_country_example'; // string | The issuing country of the document, a 3-letter ISO code.
$validate_image_quality = True; // bool | Defaults to false. When true the submitted image will undergo an image quality validation which may take up to 5 seconds.
$location = new \Onfido\Model\Location(); // \Onfido\Model\Location

try {
    $result = $apiInstance->uploadDocument($applicant_id, $type, $file, $side, $issuing_country, $validate_image_quality, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**| The ID of the applicant whose document is being uploaded. |
 **type** | **string**| The type of document. |
 **file** | **\SplFileObject****\SplFileObject**| The file to be uploaded. |
 **side** | **string**| Either the &#x60;front&#x60; or &#x60;back&#x60; of the document. | [optional]
 **issuing_country** | **string**| The issuing country of the document, a 3-letter ISO code. | [optional]
 **validate_image_quality** | **bool**| Defaults to false. When true the submitted image will undergo an image quality validation which may take up to 5 seconds. | [optional]
 **location** | [**\Onfido\Model\Location**](../Model/Location.md)|  | [optional]

### Return type

[**\Onfido\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadLivePhoto()`

```php
uploadLivePhoto($applicant_id, $file, $advanced_validation): \Onfido\Model\LivePhotoResponse
```

Upload live photo

You can upload live photos to this endpoint. Like document upload, files must be uploaded as a multipart form. Valid file types are jpg, png and pdf. The file size must be between 32KB and 10MB. Live photos are validated at the point of upload to check that they contain exactly one face. This validation can be disabled by setting the advanced_validation argument to false.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Onfido\Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'token=' . 'YOUR API KEY');
$config->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new Onfido\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicant_id = 'applicant_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject | The file to be uploaded.
$advanced_validation = true; // bool | Validates that the live photo contains exactly one face.

try {
    $result = $apiInstance->uploadLivePhoto($applicant_id, $file, $advanced_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadLivePhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **file** | **\SplFileObject****\SplFileObject**| The file to be uploaded. |
 **advanced_validation** | **bool**| Validates that the live photo contains exactly one face. | [optional] [default to true]

### Return type

[**\Onfido\Model\LivePhotoResponse**](../Model/LivePhotoResponse.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

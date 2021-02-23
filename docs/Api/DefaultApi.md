# Onfido\DefaultApi

All URIs are relative to *https://api.onfido.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReport**](DefaultApi.md#cancelReport) | **POST** /reports/{report_id}/cancel | This endpoint is for cancelling individual paused reports.
[**createApplicant**](DefaultApi.md#createApplicant) | **POST** /applicants | Create Applicant
[**createCheck**](DefaultApi.md#createCheck) | **POST** /checks | Create a check
[**createWebhook**](DefaultApi.md#createWebhook) | **POST** /webhooks | Create a webhook
[**deleteWebhook**](DefaultApi.md#deleteWebhook) | **DELETE** /webhooks/{webhook_id} | Delete a webhook
[**destroyApplicant**](DefaultApi.md#destroyApplicant) | **DELETE** /applicants/{applicant_id} | Delete Applicant
[**downloadDocument**](DefaultApi.md#downloadDocument) | **GET** /documents/{document_id}/download | Download a documents raw data
[**downloadLivePhoto**](DefaultApi.md#downloadLivePhoto) | **GET** /live_photos/{live_photo_id}/download | Download live photo
[**downloadLiveVideo**](DefaultApi.md#downloadLiveVideo) | **GET** /live_videos/{live_video_id}/download | Download live video
[**downloadLiveVideoFrame**](DefaultApi.md#downloadLiveVideoFrame) | **GET** /live_videos/{live_video_id}/frame | Download live video frame
[**editWebhook**](DefaultApi.md#editWebhook) | **PUT** /webhooks/{webhook_id} | Edit a webhook
[**findAddresses**](DefaultApi.md#findAddresses) | **GET** /addresses/pick | Search for addresses by postcode
[**findApplicant**](DefaultApi.md#findApplicant) | **GET** /applicants/{applicant_id} | Retrieve Applicant
[**findCheck**](DefaultApi.md#findCheck) | **GET** /checks/{check_id} | Retrieve a Check
[**findDocument**](DefaultApi.md#findDocument) | **GET** /documents/{document_id} | A single document can be retrieved by calling this endpoint with the document’s unique identifier.
[**findLivePhoto**](DefaultApi.md#findLivePhoto) | **GET** /live_photos/{live_photo_id} | Retrieve live photo
[**findLiveVideo**](DefaultApi.md#findLiveVideo) | **GET** /live_videos/{live_video_id} | Retrieve live video
[**findReport**](DefaultApi.md#findReport) | **GET** /reports/{report_id} | A single report can be retrieved using this endpoint with the corresponding unique identifier.
[**findWebhook**](DefaultApi.md#findWebhook) | **GET** /webhooks/{webhook_id} | Retrieve a Webhook
[**generateSdkToken**](DefaultApi.md#generateSdkToken) | **POST** /sdk_token | Generate a SDK token
[**listApplicants**](DefaultApi.md#listApplicants) | **GET** /applicants | List Applicants
[**listChecks**](DefaultApi.md#listChecks) | **GET** /checks | Retrieve Checks
[**listDocuments**](DefaultApi.md#listDocuments) | **GET** /documents | List documents
[**listLivePhotos**](DefaultApi.md#listLivePhotos) | **GET** /live_photos | List live photos
[**listLiveVideos**](DefaultApi.md#listLiveVideos) | **GET** /live_videos | List live videos
[**listReports**](DefaultApi.md#listReports) | **GET** /reports | All the reports belonging to a particular check can be listed from this endpoint.
[**listWebhooks**](DefaultApi.md#listWebhooks) | **GET** /webhooks | List webhooks
[**restoreApplicant**](DefaultApi.md#restoreApplicant) | **POST** /applicants/{applicant_id}/restore | Restore Applicant
[**resumeCheck**](DefaultApi.md#resumeCheck) | **POST** /checks/{check_id}/resume | Resume a Check
[**resumeReport**](DefaultApi.md#resumeReport) | **POST** /reports/{report_id}/resume | This endpoint is for resuming individual paused reports.
[**updateApplicant**](DefaultApi.md#updateApplicant) | **PUT** /applicants/{applicant_id} | Update Applicant
[**uploadDocument**](DefaultApi.md#uploadDocument) | **POST** /documents | Upload a document
[**uploadLivePhoto**](DefaultApi.md#uploadLivePhoto) | **POST** /live_photos | Upload live photo



## cancelReport

> cancelReport($report_id)

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
$report_id = 'report_id_example'; // string | 

try {
    $apiInstance->cancelReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelReport: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createApplicant

> \Onfido\Model\Applicant createApplicant($applicant)

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
$applicant = new \Onfido\Model\Applicant(); // \Onfido\Model\Applicant | 

try {
    $result = $apiInstance->createApplicant($applicant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant** | [**\Onfido\Model\Applicant**](../Model/Applicant.md)|  |

### Return type

[**\Onfido\Model\Applicant**](../Model/Applicant.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCheck

> \Onfido\Model\Check createCheck($check)

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
$check = new \Onfido\Model\Check(); // \Onfido\Model\Check | 

try {
    $result = $apiInstance->createCheck($check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check** | [**\Onfido\Model\Check**](../Model/Check.md)|  |

### Return type

[**\Onfido\Model\Check**](../Model/Check.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createWebhook

> \Onfido\Model\Webhook createWebhook($webhook)

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
$webhook = new \Onfido\Model\Webhook(); // \Onfido\Model\Webhook | 

try {
    $result = $apiInstance->createWebhook($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\Onfido\Model\Webhook**](../Model/Webhook.md)|  |

### Return type

[**\Onfido\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWebhook

> deleteWebhook($webhook_id)

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
$webhook_id = 'webhook_id_example'; // string | 

try {
    $apiInstance->deleteWebhook($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyApplicant

> destroyApplicant($applicant_id)

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
$applicant_id = 'applicant_id_example'; // string | 

try {
    $apiInstance->destroyApplicant($applicant_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->destroyApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## downloadDocument

> \SplFileObject downloadDocument($document_id)

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
$document_id = 'document_id_example'; // string | 

try {
    $result = $apiInstance->downloadDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## downloadLivePhoto

> \SplFileObject downloadLivePhoto($live_photo_id)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_photo_id** | **string**| The live photo’s unique identifier. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## downloadLiveVideo

> \SplFileObject downloadLiveVideo($live_video_id)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_video_id** | **string**| The live video’s unique identifier. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## downloadLiveVideoFrame

> \SplFileObject downloadLiveVideoFrame($live_video_id)

Download live video frame

Live video frames are downloaded using this endpoint.

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
    $result = $apiInstance->downloadLiveVideoFrame($live_video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadLiveVideoFrame: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_video_id** | **string**| The live video’s unique identifier. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## editWebhook

> \Onfido\Model\Webhook editWebhook($webhook_id, $webhook)

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
$webhook_id = 'webhook_id_example'; // string | 
$webhook = new \Onfido\Model\Webhook(); // \Onfido\Model\Webhook | 

try {
    $result = $apiInstance->editWebhook($webhook_id, $webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->editWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**|  |
 **webhook** | [**\Onfido\Model\Webhook**](../Model/Webhook.md)|  |

### Return type

[**\Onfido\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findAddresses

> \Onfido\Model\AddressesList findAddresses($postcode)

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
$postcode = 'postcode_example'; // string | 

try {
    $result = $apiInstance->findAddresses($postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findApplicant

> \Onfido\Model\Applicant findApplicant($applicant_id)

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
$applicant_id = 'applicant_id_example'; // string | 

try {
    $result = $apiInstance->findApplicant($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

[**\Onfido\Model\Applicant**](../Model/Applicant.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findCheck

> \Onfido\Model\Check findCheck($check_id)

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
$check_id = 'check_id_example'; // string | 

try {
    $result = $apiInstance->findCheck($check_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |

### Return type

[**\Onfido\Model\Check**](../Model/Check.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findDocument

> \Onfido\Model\Document findDocument($document_id)

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
$document_id = 'document_id_example'; // string | 

try {
    $result = $apiInstance->findDocument($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**|  |

### Return type

[**\Onfido\Model\Document**](../Model/Document.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findLivePhoto

> \Onfido\Model\LivePhoto findLivePhoto($live_photo_id)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_photo_id** | **string**| The live photo’s unique identifier. |

### Return type

[**\Onfido\Model\LivePhoto**](../Model/LivePhoto.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findLiveVideo

> \Onfido\Model\LiveVideo findLiveVideo($live_video_id)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findReport

> \Onfido\Model\Report findReport($report_id)

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
$report_id = 'report_id_example'; // string | 

try {
    $result = $apiInstance->findReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findReport: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## findWebhook

> \Onfido\Model\Webhook findWebhook($webhook_id)

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
$webhook_id = 'webhook_id_example'; // string | 

try {
    $result = $apiInstance->findWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->findWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**|  |

### Return type

[**\Onfido\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## generateSdkToken

> \Onfido\Model\SdkToken generateSdkToken($sdk_token)

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
$sdk_token = new \Onfido\Model\SdkToken(); // \Onfido\Model\SdkToken | 

try {
    $result = $apiInstance->generateSdkToken($sdk_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateSdkToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sdk_token** | [**\Onfido\Model\SdkToken**](../Model/SdkToken.md)|  |

### Return type

[**\Onfido\Model\SdkToken**](../Model/SdkToken.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listApplicants

> \Onfido\Model\ApplicantsList listApplicants($page, $per_page, $include_deleted)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listChecks

> \Onfido\Model\ChecksList listChecks($applicant_id)

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
$applicant_id = 'applicant_id_example'; // string | 

try {
    $result = $apiInstance->listChecks($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listChecks: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDocuments

> \Onfido\Model\DocumentsList listDocuments($applicant_id)

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
$applicant_id = 'applicant_id_example'; // string | 

try {
    $result = $apiInstance->listDocuments($applicant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLivePhotos

> \Onfido\Model\LivePhotosList listLivePhotos($applicant_id)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLiveVideos

> \Onfido\Model\LiveVideosList listLiveVideos($applicant_id)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listReports

> \Onfido\Model\ReportsList listReports($check_id)

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
$check_id = 'check_id_example'; // string | 

try {
    $result = $apiInstance->listReports($check_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listReports: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWebhooks

> \Onfido\Model\WebhooksList listWebhooks()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Onfido\Model\WebhooksList**](../Model/WebhooksList.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## restoreApplicant

> restoreApplicant($applicant_id)

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
$applicant_id = 'applicant_id_example'; // string | 

try {
    $apiInstance->restoreApplicant($applicant_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->restoreApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resumeCheck

> resumeCheck($check_id)

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
$check_id = 'check_id_example'; // string | 

try {
    $apiInstance->resumeCheck($check_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->resumeCheck: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resumeReport

> resumeReport($report_id)

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
$report_id = 'report_id_example'; // string | 

try {
    $apiInstance->resumeReport($report_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->resumeReport: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateApplicant

> \Onfido\Model\Applicant updateApplicant($applicant_id, $applicant)

Update Applicant

Applicant details can be updated between check creations. - Partial updates - Addresses and ID numbers present will replace existing ones - Same applicant validations to create applicant

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
$applicant_id = 'applicant_id_example'; // string | 
$applicant = new \Onfido\Model\Applicant(); // \Onfido\Model\Applicant | 

try {
    $result = $apiInstance->updateApplicant($applicant_id, $applicant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **applicant** | [**\Onfido\Model\Applicant**](../Model/Applicant.md)|  |

### Return type

[**\Onfido\Model\Applicant**](../Model/Applicant.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadDocument

> \Onfido\Model\Document uploadDocument($applicant_id, $type, $file, $side, $issuing_country)

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

try {
    $result = $apiInstance->uploadDocument($applicant_id, $type, $file, $side, $issuing_country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**| The ID of the applicant whose document is being uploaded. |
 **type** | **string**| The type of document. |
 **file** | **\SplFileObject****\SplFileObject**| The file to be uploaded. |
 **side** | **string**| Either the &#x60;front&#x60; or &#x60;back&#x60; of the document. | [optional]
 **issuing_country** | **string**| The issuing country of the document, a 3-letter ISO code. | [optional]

### Return type

[**\Onfido\Model\Document**](../Model/Document.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadLivePhoto

> \Onfido\Model\LivePhoto uploadLivePhoto($applicant_id, $file, $advanced_validation)

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
$applicant_id = 'applicant_id_example'; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | The file to be uploaded.
$advanced_validation = true; // bool | Validates that the live photo contains exactly one face.

try {
    $result = $apiInstance->uploadLivePhoto($applicant_id, $file, $advanced_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadLivePhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **file** | **\SplFileObject****\SplFileObject**| The file to be uploaded. |
 **advanced_validation** | **bool**| Validates that the live photo contains exactly one face. | [optional] [default to true]

### Return type

[**\Onfido\Model\LivePhoto**](../Model/LivePhoto.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


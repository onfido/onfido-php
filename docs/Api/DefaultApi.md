# Onfido\DefaultApi

All URIs are relative to *https://api.onfido.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReport**](DefaultApi.md#cancelReport) | **POST** /checks/{check_id}/reports/{report_id}/cancel | This endpoint is for cancelling individual paused reports.
[**createApplicant**](DefaultApi.md#createApplicant) | **POST** /applicants | Create Applicant
[**createCheck**](DefaultApi.md#createCheck) | **POST** /applicants/{applicant_id}/checks | Create a check
[**createWebhook**](DefaultApi.md#createWebhook) | **POST** /webhooks | Create a webhook
[**destroyApplicant**](DefaultApi.md#destroyApplicant) | **DELETE** /applicants/{applicant_id} | Delete Applicant
[**downloadDocument**](DefaultApi.md#downloadDocument) | **GET** /applicants/{applicant_id}/documents/{document_id}/download | Download a documents raw data
[**downloadLivePhoto**](DefaultApi.md#downloadLivePhoto) | **GET** /live_photos/{live_photo_id}/download | Download live photo
[**findAddresses**](DefaultApi.md#findAddresses) | **GET** /addresses/pick | Search for addresses by postcode
[**findApplicant**](DefaultApi.md#findApplicant) | **GET** /applicants/{applicant_id} | Retrieve Applicant
[**findCheck**](DefaultApi.md#findCheck) | **GET** /applicants/{applicant_id}/checks/{check_id} | Retrieve a Check
[**findDocument**](DefaultApi.md#findDocument) | **GET** /applicants/{applicant_id}/documents/{document_id} | A single document can be retrieved by calling this endpoint with the document’s unique identifier.
[**findLivePhoto**](DefaultApi.md#findLivePhoto) | **GET** /live_photos/{live_photo_id} | Retrieve live photo
[**findLiveVideo**](DefaultApi.md#findLiveVideo) | **GET** /live_videos/{live_video_id} | Retrieve live video
[**findReport**](DefaultApi.md#findReport) | **GET** /checks/{check_id}/reports/{report_id} | A single report can be retrieved using this endpoint with the corresponding unique identifier.
[**findReportTypeGroup**](DefaultApi.md#findReportTypeGroup) | **GET** /report_type_groups/{report_type_group_id} | Retrieve single report type group object
[**findWebhook**](DefaultApi.md#findWebhook) | **GET** /webhooks/{webhook_id} | Retrieve a Webhook
[**listApplicants**](DefaultApi.md#listApplicants) | **GET** /applicants | List Applicants
[**listChecks**](DefaultApi.md#listChecks) | **GET** /applicants/{applicant_id}/checks | Retrieve Checks
[**listDocuments**](DefaultApi.md#listDocuments) | **GET** /applicants/{applicant_id}/documents | List documents
[**listLivePhotos**](DefaultApi.md#listLivePhotos) | **GET** /live_photos | List live photos
[**listLiveVideos**](DefaultApi.md#listLiveVideos) | **GET** /live_videos | List live videos
[**listReportTypeGroups**](DefaultApi.md#listReportTypeGroups) | **GET** /report_type_groups | Retrieve all report type groups
[**listReports**](DefaultApi.md#listReports) | **GET** /checks/{check_id}/reports | All the reports belonging to a particular check can be listed from this endpoint.
[**listWebhooks**](DefaultApi.md#listWebhooks) | **GET** /webhooks | List webhooks
[**restoreApplicant**](DefaultApi.md#restoreApplicant) | **POST** /applicants/{applicant_id}/restore | Restore Applicant
[**resumeCheck**](DefaultApi.md#resumeCheck) | **POST** /checks/{check_id}/resume | Resume a Check
[**resumeReport**](DefaultApi.md#resumeReport) | **POST** /checks/{check_id}/reports/{report_id}/resume | This endpoint is for resuming individual paused reports.
[**updateApplicant**](DefaultApi.md#updateApplicant) | **PUT** /applicants/{applicant_id} | Update Applicant
[**uploadDocument**](DefaultApi.md#uploadDocument) | **POST** /applicants/{applicant_id}/documents | Upload a document
[**uploadLivePhoto**](DefaultApi.md#uploadLivePhoto) | **POST** /live_photos | Upload live photo


# **cancelReport**
> cancelReport($check_id, $report_id)

This endpoint is for cancelling individual paused reports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$check_id = "check_id_example"; // string | 
$report_id = "report_id_example"; // string | 

try {
    $api_instance->cancelReport($check_id, $report_id);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |
 **report_id** | **string**|  |

### Return type

void (empty response body)

# **createApplicant**
> \Onfido\Models\Applicant createApplicant($data)

Create Applicant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$data = new \Onfido\Models\Applicant(); // \Onfido\Models\Applicant | 

try {
    $result = $api_instance->createApplicant($data);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Onfido\Models\Applicant**](../Model/\Onfido\Models\Applicant.md)|  | [optional]

### Return type

[**\Onfido\Models\Applicant**](../Model/Applicant.md)

# **createCheck**
> \Onfido\Models\Check createCheck($applicant_id, $data)

Create a check

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 
$data = new \Onfido\Models\CheckCreationRequest(); // \Onfido\Models\CheckCreationRequest | 

try {
    $result = $api_instance->createCheck($applicant_id, $data);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **data** | [**\Onfido\Models\CheckCreationRequest**](../Model/\Onfido\Models\CheckCreationRequest.md)|  | [optional]

### Return type

[**\Onfido\Models\Check**](../Model/Check.md)

# **createWebhook**
> \Onfido\Models\Webhook createWebhook($data)

Create a webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$data = new \Onfido\Models\Webhook(); // \Onfido\Models\Webhook | 

try {
    $result = $api_instance->createWebhook($data);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Onfido\Models\Webhook**](../Model/\Onfido\Models\Webhook.md)|  | [optional]

### Return type

[**\Onfido\Models\Webhook**](../Model/Webhook.md)

# **destroyApplicant**
> destroyApplicant($applicant_id)

Delete Applicant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 

try {
    $api_instance->destroyApplicant($applicant_id);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

void (empty response body)

# **downloadDocument**
> \SplFileObject downloadDocument($applicant_id, $document_id)

Download a documents raw data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 
$document_id = "document_id_example"; // string | 

try {
    $result = $api_instance->downloadDocument($applicant_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **document_id** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

# **downloadLivePhoto**
> \SplFileObject downloadLivePhoto($live_photo_id)

Download live photo

Live photos are downloaded using this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$live_photo_id = "live_photo_id_example"; // string | The live photo’s unique identifier.

try {
    $result = $api_instance->downloadLivePhoto($live_photo_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_photo_id** | **string**| The live photo’s unique identifier. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

# **findAddresses**
> \Onfido\Models\GenericAddressesList findAddresses($postcode)

Search for addresses by postcode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$postcode = "postcode_example"; // string | 

try {
    $result = $api_instance->findAddresses($postcode);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postcode** | **string**|  |

### Return type

[**\Onfido\Models\GenericAddressesList**](../Model/GenericAddressesList.md)

# **findApplicant**
> \Onfido\Models\Applicant findApplicant($applicant_id)

Retrieve Applicant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 

try {
    $result = $api_instance->findApplicant($applicant_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

[**\Onfido\Models\Applicant**](../Model/Applicant.md)

# **findCheck**
> \Onfido\Models\Check findCheck($applicant_id, $check_id)

Retrieve a Check

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 
$check_id = "check_id_example"; // string | 

try {
    $result = $api_instance->findCheck($applicant_id, $check_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **check_id** | **string**|  |

### Return type

[**\Onfido\Models\Check**](../Model/Check.md)

# **findDocument**
> \Onfido\Models\Document findDocument($applicant_id, $document_id)

A single document can be retrieved by calling this endpoint with the document’s unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 
$document_id = "document_id_example"; // string | 

try {
    $result = $api_instance->findDocument($applicant_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **document_id** | **string**|  |

### Return type

[**\Onfido\Models\Document**](../Model/Document.md)

# **findLivePhoto**
> \Onfido\Models\LivePhoto findLivePhoto($live_photo_id)

Retrieve live photo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$live_photo_id = "live_photo_id_example"; // string | The live photo’s unique identifier.

try {
    $result = $api_instance->findLivePhoto($live_photo_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_photo_id** | **string**| The live photo’s unique identifier. |

### Return type

[**\Onfido\Models\LivePhoto**](../Model/LivePhoto.md)

# **findLiveVideo**
> \Onfido\Models\LiveVideo findLiveVideo($live_video_id)

Retrieve live video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$live_video_id = "live_video_id_example"; // string | The live video’s unique identifier.

try {
    $result = $api_instance->findLiveVideo($live_video_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **live_video_id** | **string**| The live video’s unique identifier. |

### Return type

[**\Onfido\Models\LiveVideo**](../Model/LiveVideo.md)

# **findReport**
> \Onfido\Models\Report findReport($check_id, $report_id)

A single report can be retrieved using this endpoint with the corresponding unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$check_id = "check_id_example"; // string | 
$report_id = "report_id_example"; // string | 

try {
    $result = $api_instance->findReport($check_id, $report_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |
 **report_id** | **string**|  |

### Return type

[**\Onfido\Models\Report**](../Model/Report.md)

# **findReportTypeGroup**
> \Onfido\Models\ReportTypeGroup findReportTypeGroup($report_type_group_id)

Retrieve single report type group object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$report_type_group_id = "report_type_group_id_example"; // string | 

try {
    $result = $api_instance->findReportTypeGroup($report_type_group_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_type_group_id** | **string**|  |

### Return type

[**\Onfido\Models\ReportTypeGroup**](../Model/ReportTypeGroup.md)

# **findWebhook**
> \Onfido\Models\Webhook findWebhook($webhook_id)

Retrieve a Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$webhook_id = "webhook_id_example"; // string | 

try {
    $result = $api_instance->findWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**|  |

### Return type

[**\Onfido\Models\Webhook**](../Model/Webhook.md)

# **listApplicants**
> \Onfido\Models\ApplicantsList listApplicants($page, $per_page, $include_deleted)

List Applicants

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$page = 56; // int | The page to return. Defaults to the first page if omitted. The first page is `page=1`
$per_page = 56; // int | The number of objects per page. Defaults to 20 if omitted.
$include_deleted = true; // bool | Whether to also include applicants scheduled for deletion. Defaults to false if omitted.

try {
    $result = $api_instance->listApplicants($page, $per_page, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to return. Defaults to the first page if omitted. The first page is &#x60;page&#x3D;1&#x60; | [optional]
 **per_page** | **int**| The number of objects per page. Defaults to 20 if omitted. | [optional]
 **include_deleted** | **bool**| Whether to also include applicants scheduled for deletion. Defaults to false if omitted. | [optional]

### Return type

[**\Onfido\Models\ApplicantsList**](../Model/ApplicantsList.md)

# **listChecks**
> \Onfido\Models\ChecksList listChecks($applicant_id, $page, $per_page)

Retrieve Checks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 
$page = 56; // int | The page to return. Defaults to the first page if omitted. The first page is `page=1`
$per_page = 56; // int | The number of objects per page. Defaults to 20 if omitted.

try {
    $result = $api_instance->listChecks($applicant_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **page** | **int**| The page to return. Defaults to the first page if omitted. The first page is &#x60;page&#x3D;1&#x60; | [optional]
 **per_page** | **int**| The number of objects per page. Defaults to 20 if omitted. | [optional]

### Return type

[**\Onfido\Models\ChecksList**](../Model/ChecksList.md)

# **listDocuments**
> \Onfido\Models\DocumentsList listDocuments($applicant_id)

List documents

All documents belonging to an applicant can be listed from this endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 

try {
    $result = $api_instance->listDocuments($applicant_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

[**\Onfido\Models\DocumentsList**](../Model/DocumentsList.md)

# **listLivePhotos**
> \Onfido\Models\LivePhotosList listLivePhotos($applicant_id)

List live photos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | The id of the applicant the live photos belong to.

try {
    $result = $api_instance->listLivePhotos($applicant_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**| The id of the applicant the live photos belong to. |

### Return type

[**\Onfido\Models\LivePhotosList**](../Model/LivePhotosList.md)

# **listLiveVideos**
> \Onfido\Models\LiveVideosList listLiveVideos($applicant_id)

List live videos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | The id of the applicant the live videos belong to.

try {
    $result = $api_instance->listLiveVideos($applicant_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**| The id of the applicant the live videos belong to. |

### Return type

[**\Onfido\Models\LiveVideosList**](../Model/LiveVideosList.md)

# **listReportTypeGroups**
> \Onfido\Models\ReportTypeGroupsList listReportTypeGroups()

Retrieve all report type groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();

try {
    $result = $api_instance->listReportTypeGroups();
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Onfido\Models\ReportTypeGroupsList**](../Model/ReportTypeGroupsList.md)

# **listReports**
> \Onfido\Models\ReportsList listReports($check_id)

All the reports belonging to a particular check can be listed from this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$check_id = "check_id_example"; // string | 

try {
    $result = $api_instance->listReports($check_id);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |

### Return type

[**\Onfido\Models\ReportsList**](../Model/ReportsList.md)

# **listWebhooks**
> \Onfido\Models\WebhooksList listWebhooks()

List webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();

try {
    $result = $api_instance->listWebhooks();
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Onfido\Models\WebhooksList**](../Model/WebhooksList.md)

# **restoreApplicant**
> restoreApplicant($applicant_id)

Restore Applicant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 

try {
    $api_instance->restoreApplicant($applicant_id);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |

### Return type

void (empty response body)

# **resumeCheck**
> resumeCheck($check_id)

Resume a Check

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$check_id = "check_id_example"; // string | 

try {
    $api_instance->resumeCheck($check_id);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |

### Return type

void (empty response body)

# **resumeReport**
> resumeReport($check_id, $report_id)

This endpoint is for resuming individual paused reports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$check_id = "check_id_example"; // string | 
$report_id = "report_id_example"; // string | 

try {
    $api_instance->resumeReport($check_id, $report_id);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_id** | **string**|  |
 **report_id** | **string**|  |

### Return type

void (empty response body)

# **updateApplicant**
> \Onfido\Models\Applicant updateApplicant($applicant_id, $data)

Update Applicant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 
$data = new \Onfido\Models\Applicant(); // \Onfido\Models\Applicant | 

try {
    $result = $api_instance->updateApplicant($applicant_id, $data);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **data** | [**\Onfido\Models\Applicant**](../Model/\Onfido\Models\Applicant.md)|  | [optional]

### Return type

[**\Onfido\Models\Applicant**](../Model/Applicant.md)

# **uploadDocument**
> \Onfido\Models\Document uploadDocument($applicant_id, $type, $side, $file)

Upload a document

Documents are uploaded using this endpoint. Along with the file upload the relevant document type must be specified. Documents must be uploaded as a multipart form. The valid file types are: jpg, png and pdf. The file size must be between 2KB and 3MB.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | 
$type = "type_example"; // string | 
$side = "side_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $api_instance->uploadDocument($applicant_id, $type, $side, $file);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**|  |
 **type** | **string**|  |
 **side** | **string**|  | [optional]
 **file** | **\SplFileObject**|  | [optional]

### Return type

[**\Onfido\Models\Document**](../Model/Document.md)

# **uploadLivePhoto**
> \Onfido\Models\LivePhoto uploadLivePhoto($applicant_id, $file, $advanced_validation)

Upload live photo

You can upload live photos to this endpoint. Like document upload, files must be uploaded as a multipart form. Valid file types are jpg, png and pdf. The file size must be between 32KB and 10MB. Live photos are validated at the point of upload to check that they contain exactly one face. This validation can be disabled by setting the advanced_validation argument to false.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
Onfido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'token=' . 'YOUR_API_KEY');
Onfido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$api_instance = new Onfido\Api\DefaultApi();
$applicant_id = "applicant_id_example"; // string | The applicant_id to associate the live photo to.
$file = "/path/to/file.txt"; // \SplFileObject | The file to be uploaded.
$advanced_validation = true; // bool | Validates that the live photo contains exactly one face.

try {
    $result = $api_instance->uploadLivePhoto($applicant_id, $file, $advanced_validation);
    print_r($result);
} catch (Exception $e) {
    print_r($e->getResponseBody());
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicant_id** | **string**| The applicant_id to associate the live photo to. |
 **file** | **\SplFileObject**| The file to be uploaded. |
 **advanced_validation** | **bool**| Validates that the live photo contains exactly one face. | [optional]

### Return type

[**\Onfido\Models\LivePhoto**](../Model/LivePhoto.md)


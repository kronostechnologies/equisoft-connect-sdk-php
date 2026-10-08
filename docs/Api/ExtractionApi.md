# Equisoft\SDK\EquisoftConnect\ExtractionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addExtraction()**](ExtractionApi.md#addExtraction) | **POST** /crm/api/v1/extractions | Add an extraction |
| [**deleteExtraction()**](ExtractionApi.md#deleteExtraction) | **DELETE** /crm/api/v1/extractions/{uuid} | Delete an extraction |
| [**getExtraction()**](ExtractionApi.md#getExtraction) | **GET** /crm/api/v1/extractions/{uuid} | Get an extraction |
| [**listExtractions()**](ExtractionApi.md#listExtractions) | **GET** /crm/api/v1/extractions | List extractions |
| [**resumeExtraction()**](ExtractionApi.md#resumeExtraction) | **POST** /crm/api/v1/extractions/{uuid}/resume | Resume an extraction |


## `addExtraction()`

```php
addExtraction($extractionsAddExtractionPayload)
```

Add an extraction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extractionsAddExtractionPayload = new \Equisoft\SDK\EquisoftConnect\Model\ExtractionsAddExtractionPayload(); // \Equisoft\SDK\EquisoftConnect\Model\ExtractionsAddExtractionPayload

try {
    $apiInstance->addExtraction($extractionsAddExtractionPayload);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->addExtraction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extractionsAddExtractionPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\ExtractionsAddExtractionPayload**](../Model/ExtractionsAddExtractionPayload.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExtraction()`

```php
deleteExtraction($uuid)
```

Delete an extraction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Unique identifier.

try {
    $apiInstance->deleteExtraction($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->deleteExtraction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Unique identifier. | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtraction()`

```php
getExtraction($uuid): \Equisoft\SDK\EquisoftConnect\Model\ExtractionsExtraction
```

Get an extraction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Unique identifier.

try {
    $result = $apiInstance->getExtraction($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->getExtraction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Unique identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ExtractionsExtraction**](../Model/ExtractionsExtraction.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listExtractions()`

```php
listExtractions($extractionsAddExtractionPayload, $status, $today, $includeDeleted, $pageToken, $maxResults): \Equisoft\SDK\EquisoftConnect\Model\ExtractionsListExtractionResponse
```

List extractions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extractionsAddExtractionPayload = new \Equisoft\SDK\EquisoftConnect\Model\ExtractionsAddExtractionPayload(); // \Equisoft\SDK\EquisoftConnect\Model\ExtractionsAddExtractionPayload
$status = 'status_example'; // string | Filter extraction status.
$today = True; // bool | Filter by today only. Default: false.
$includeDeleted = True; // bool | Filter by including deleted extractions. Default: false.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.

try {
    $result = $apiInstance->listExtractions($extractionsAddExtractionPayload, $status, $today, $includeDeleted, $pageToken, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->listExtractions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extractionsAddExtractionPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\ExtractionsAddExtractionPayload**](../Model/ExtractionsAddExtractionPayload.md)|  | |
| **status** | **string**| Filter extraction status. | [optional] |
| **today** | **bool**| Filter by today only. Default: false. | [optional] |
| **includeDeleted** | **bool**| Filter by including deleted extractions. Default: false. | [optional] |
| **pageToken** | **string**| Token to specify which page to fetch. | [optional] |
| **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ExtractionsListExtractionResponse**](../Model/ExtractionsListExtractionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resumeExtraction()`

```php
resumeExtraction($uuid, $extractionsResumeExtractionPayload)
```

Resume an extraction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\ExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Unique identifier.
$extractionsResumeExtractionPayload = new \Equisoft\SDK\EquisoftConnect\Model\ExtractionsResumeExtractionPayload(); // \Equisoft\SDK\EquisoftConnect\Model\ExtractionsResumeExtractionPayload

try {
    $apiInstance->resumeExtraction($uuid, $extractionsResumeExtractionPayload);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->resumeExtraction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Unique identifier. | |
| **extractionsResumeExtractionPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\ExtractionsResumeExtractionPayload**](../Model/ExtractionsResumeExtractionPayload.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Equisoft\SDK\EquisoftConnect\DocumentsApi

Documents

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /crm/api/v1/documents/{documentId} | Delete a document. |
| [**deleteDocuments()**](DocumentsApi.md#deleteDocuments) | **DELETE** /crm/api/v1/documents | Delete specified documents. |
| [**getById()**](DocumentsApi.md#getById) | **GET** /crm/api/v1/documents/{documentId} | Get document by id |
| [**listDocument()**](DocumentsApi.md#listDocument) | **GET** /crm/api/v1/documents | List document |


## `deleteDocument()`

```php
deleteDocument($documentId)
```

Delete a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = 'documentId_example'; // string | Document unique identifier.

try {
    $apiInstance->deleteDocument($documentId);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document unique identifier. | |

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

## `deleteDocuments()`

```php
deleteDocuments($documentIds)
```

Delete specified documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentIds = 'documentIds_example'; // string | Documents unique identifiers. Many ids can be passed to this argument separated by coma. Ex: '?documentIds=1,2,3'. Any of the given documents will be deleted.

try {
    $apiInstance->deleteDocuments($documentIds);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentIds** | **string**| Documents unique identifiers. Many ids can be passed to this argument separated by coma. Ex: &#39;?documentIds&#x3D;1,2,3&#39;. Any of the given documents will be deleted. | |

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

## `getById()`

```php
getById($documentId): \Equisoft\SDK\EquisoftConnect\Model\DocumentsDocument
```

Get document by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = 'documentId_example'; // string | Document unique identifier.

try {
    $result = $apiInstance->getById($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **string**| Document unique identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DocumentsDocument**](../Model/DocumentsDocument.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDocument()`

```php
listDocument($systemType, $lastModifiedDate, $pageToken, $maxResults): \Equisoft\SDK\EquisoftConnect\Model\DocumentsListDocumentResponse
```

List document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemType = 'systemType_example'; // string | Filter document system type.
$lastModifiedDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Returns only documents modified on this date or after.
$pageToken = MjUwMDszMDAK; // string | Token to specify which page to fetch.
$maxResults = 'maxResults_example'; // string | Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records.

try {
    $result = $apiInstance->listDocument($systemType, $lastModifiedDate, $pageToken, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->listDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemType** | **string**| Filter document system type. | [optional] |
| **lastModifiedDate** | **\DateTime**| Returns only documents modified on this date or after. | [optional] |
| **pageToken** | **string**| Token to specify which page to fetch. | [optional] |
| **maxResults** | **string**| Maximum number of records for one result page. If the query return more records, nextPageToken will be specified in the result to get the records of the next page. Defaults to 250 records. Can never be more than 2500 records. | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DocumentsListDocumentResponse**](../Model/DocumentsListDocumentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

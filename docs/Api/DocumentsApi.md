# Equisoft\SDK\EquisoftConnect\DocumentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /crm/api/v1/documents/{documentId} | Delete a document. |
| [**deleteDocuments()**](DocumentsApi.md#deleteDocuments) | **DELETE** /crm/api/v1/documents | Delete specified documents. |


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

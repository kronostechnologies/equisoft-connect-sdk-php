# Equisoft\SDK\EquisoftConnect\LegacyDocumentApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument()**](LegacyDocumentApi.md#addDocument) | **POST** /apps/api/kronos.document.add | Create a new document.
[**deleteDocument()**](LegacyDocumentApi.md#deleteDocument) | **POST** /apps/api/kronos.document.delete | Delete a document and it&#39;s related files.
[**deleteDocumentFile()**](LegacyDocumentApi.md#deleteDocumentFile) | **POST** /apps/api/kronos.document.deleteFile | Delete one file from a document
[**downloadDocumentFile()**](LegacyDocumentApi.md#downloadDocumentFile) | **GET** /apps/api/kronos.document.downloadFile | Download a file. File data is encoded in base64.
[**getDocument()**](LegacyDocumentApi.md#getDocument) | **GET** /apps/api/kronos.document.get | Get all data for a document record.
[**getDocumentList()**](LegacyDocumentApi.md#getDocumentList) | **GET** /apps/api/kronos.document.getList | Get a list of all documents. This will return basic information about the document.
[**updateDocument()**](LegacyDocumentApi.md#updateDocument) | **POST** /apps/api/kronos.document.update | Update a document.
[**uploadDocumentFile()**](LegacyDocumentApi.md#uploadDocumentFile) | **POST** /apps/api/kronos.document.uploadFile | Upload a new file in a document


## `addDocument()`

```php
addDocument($legacyDocumentDocumentPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Create a new document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacyDocumentDocumentPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest

try {
    $result = $apiInstance->addDocument($legacyDocumentDocumentPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->addDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacyDocumentDocumentPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest**](../Model/LegacyDocumentDocumentPayloadRequest.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse**](../Model/LegacyAddUpdateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocument()`

```php
deleteDocument($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
```

Delete a document and it's related files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Document Id

try {
    $result = $apiInstance->deleteDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document Id |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse**](../Model/LegacyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocumentFile()`

```php
deleteDocumentFile($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
```

Delete one file from a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Document File Id

try {
    $result = $apiInstance->deleteDocumentFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->deleteDocumentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document File Id |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse**](../Model/LegacyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadDocumentFile()`

```php
downloadDocumentFile($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDownloadFileResponse
```

Download a file. File data is encoded in base64.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Document File Id

try {
    $result = $apiInstance->downloadDocumentFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->downloadDocumentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document File Id |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDownloadFileResponse**](../Model/LegacyDocumentDownloadFileResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetResponse
```

Get all data for a document record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Document Id

try {
    $result = $apiInstance->getDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document Id |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetResponse**](../Model/LegacyDocumentGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentList()`

```php
getDocumentList(): \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetListResponse
```

Get a list of all documents. This will return basic information about the document.

Please note that a document is similar to a folder and may contain one or many files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDocumentList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->getDocumentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetListResponse**](../Model/LegacyDocumentGetListResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocument()`

```php
updateDocument($legacyDocumentDocumentPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Update a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacyDocumentDocumentPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest

try {
    $result = $apiInstance->updateDocument($legacyDocumentDocumentPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->updateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacyDocumentDocumentPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest**](../Model/LegacyDocumentDocumentPayloadRequest.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse**](../Model/LegacyAddUpdateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocumentFile()`

```php
uploadDocumentFile($id, $legacyDocumentUploadDocumentFileRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Upload a new file in a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Document File Id
$legacyDocumentUploadDocumentFileRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentUploadDocumentFileRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentUploadDocumentFileRequest

try {
    $result = $apiInstance->uploadDocumentFile($id, $legacyDocumentUploadDocumentFileRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->uploadDocumentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document File Id |
 **legacyDocumentUploadDocumentFileRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentUploadDocumentFileRequest**](../Model/LegacyDocumentUploadDocumentFileRequest.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse**](../Model/LegacyAddUpdateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

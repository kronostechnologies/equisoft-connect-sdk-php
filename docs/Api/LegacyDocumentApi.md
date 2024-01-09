# Equisoft\SDK\EquisoftConnect\LegacyDocumentApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**legacyDocumentAddDocument()**](LegacyDocumentApi.md#legacyDocumentAddDocument) | **POST** /apps/api/kronos.document.add | Create a new document.
[**legacyDocumentDeleteDocument()**](LegacyDocumentApi.md#legacyDocumentDeleteDocument) | **POST** /apps/api/kronos.document.delete | Delete a document and it&#39;s related files.
[**legacyDocumentDeleteDocumentFile()**](LegacyDocumentApi.md#legacyDocumentDeleteDocumentFile) | **POST** /apps/api/kronos.document.deleteFile | Delete one file from a document.
[**legacyDocumentDownloadDocumentFile()**](LegacyDocumentApi.md#legacyDocumentDownloadDocumentFile) | **GET** /apps/api/kronos.document.downloadFile | Download a file. File data is encoded in base64.
[**legacyDocumentGetDocument()**](LegacyDocumentApi.md#legacyDocumentGetDocument) | **GET** /apps/api/kronos.document.get | Get all data for a document record.
[**legacyDocumentGetDocumentList()**](LegacyDocumentApi.md#legacyDocumentGetDocumentList) | **GET** /apps/api/kronos.document.getList | Get a list of all documents.
[**legacyDocumentUpdateDocument()**](LegacyDocumentApi.md#legacyDocumentUpdateDocument) | **POST** /apps/api/kronos.document.update | Update a document.
[**legacyDocumentUploadDocumentFile()**](LegacyDocumentApi.md#legacyDocumentUploadDocumentFile) | **POST** /apps/api/kronos.document.uploadFile | Upload a new file in a document.


## `legacyDocumentAddDocument()`

```php
legacyDocumentAddDocument($legacyDocumentDocumentPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
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
    $result = $apiInstance->legacyDocumentAddDocument($legacyDocumentDocumentPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentAddDocument: ', $e->getMessage(), PHP_EOL;
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

## `legacyDocumentDeleteDocument()`

```php
legacyDocumentDeleteDocument($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
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
$id = 'id_example'; // string | Document identifier.

try {
    $result = $apiInstance->legacyDocumentDeleteDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentDeleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document identifier. |

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

## `legacyDocumentDeleteDocumentFile()`

```php
legacyDocumentDeleteDocumentFile($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse
```

Delete one file from a document.

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
$id = 'id_example'; // string | Document file identifier.

try {
    $result = $apiInstance->legacyDocumentDeleteDocumentFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentDeleteDocumentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document file identifier. |

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

## `legacyDocumentDownloadDocumentFile()`

```php
legacyDocumentDownloadDocumentFile($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDownloadFileResponse
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
$id = 'id_example'; // string | Document file identifier.

try {
    $result = $apiInstance->legacyDocumentDownloadDocumentFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentDownloadDocumentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document file identifier. |

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

## `legacyDocumentGetDocument()`

```php
legacyDocumentGetDocument($id): \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetResponse
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
$id = 'id_example'; // string | Document identifier.

try {
    $result = $apiInstance->legacyDocumentGetDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentGetDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document identifier. |

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

## `legacyDocumentGetDocumentList()`

```php
legacyDocumentGetDocumentList($legacyDocumentDocumentGetListPayloadRequest, $lastModifiedTime): \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetListResponse
```

Get a list of all documents.

This will return basic information about the document. Please note that a document is similar to a folder and may contain one or many files.

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
$legacyDocumentDocumentGetListPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentGetListPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentGetListPayloadRequest
$lastModifiedTime = 'lastModifiedTime_example'; // string | To Fetch all documents, which got modified / created after specified date. If the value \"auto\" is used, the last access date to this method will be used. Set the value to \"reset\" to reset the last access date.

try {
    $result = $apiInstance->legacyDocumentGetDocumentList($legacyDocumentDocumentGetListPayloadRequest, $lastModifiedTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentGetDocumentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacyDocumentDocumentGetListPayloadRequest** | [**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentGetListPayloadRequest**](../Model/LegacyDocumentDocumentGetListPayloadRequest.md)|  |
 **lastModifiedTime** | **string**| To Fetch all documents, which got modified / created after specified date. If the value \&quot;auto\&quot; is used, the last access date to this method will be used. Set the value to \&quot;reset\&quot; to reset the last access date. | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetListResponse**](../Model/LegacyDocumentGetListResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `legacyDocumentUpdateDocument()`

```php
legacyDocumentUpdateDocument($legacyDocumentDocumentPayloadRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
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
    $result = $apiInstance->legacyDocumentUpdateDocument($legacyDocumentDocumentPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentUpdateDocument: ', $e->getMessage(), PHP_EOL;
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

## `legacyDocumentUploadDocumentFile()`

```php
legacyDocumentUploadDocumentFile($id, $legacyDocumentUploadDocumentFileRequest): \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse
```

Upload a new file in a document.

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
$id = 'id_example'; // string | Document identifier.
$legacyDocumentUploadDocumentFileRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentUploadDocumentFileRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentUploadDocumentFileRequest

try {
    $result = $apiInstance->legacyDocumentUploadDocumentFile($id, $legacyDocumentUploadDocumentFileRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyDocumentApi->legacyDocumentUploadDocumentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Document identifier. |
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

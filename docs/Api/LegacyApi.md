# Equisoft\SDK\EquisoftConnect\LegacyApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument**](LegacyApi.md#addDocument) | **POST** /apps/api/kronos.document.add | Create a new document.
[**appsApiPost**](LegacyApi.md#appsApiPost) | **POST** /apps/api/ | Legacy API entrypoint
[**getDocument**](LegacyApi.md#getDocument) | **GET** /apps/api/kronos.document.get | Get all data for a document record.
[**getDocumentList**](LegacyApi.md#getDocumentList) | **GET** /apps/api/kronos.document.getList | Get a list of all documents. This will return basic information about the document.



## addDocument

> \Equisoft\SDK\EquisoftConnect\Model\LegacyAddUpdateResponse addDocument($legacyDocumentDocumentPayloadRequest)

Create a new document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacyDocumentDocumentPayloadRequest = new \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest(); // \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentDocumentPayloadRequest | 

try {
    $result = $apiInstance->addDocument($legacyDocumentDocumentPayloadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyApi->addDocument: ', $e->getMessage(), PHP_EOL;
}
?>
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

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsApiPost

> \Equisoft\SDK\EquisoftConnect\Model\LegacyResponse appsApiPost($method, $json, $body)

Legacy API entrypoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$method = 'method_example'; // string | Legacy method name
$json = True; // bool | 
$body = new \Equisoft\SDK\EquisoftConnect\Model\AnyType(); // AnyType | 

try {
    $result = $apiInstance->appsApiPost($method, $json, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyApi->appsApiPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **method** | **string**| Legacy method name |
 **json** | **bool**|  | [optional]
 **body** | **AnyType**|  | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyResponse**](../Model/LegacyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDocument

> \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetResponse getDocument()

Get all data for a document record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDocument();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetResponse**](../Model/LegacyDocumentGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDocumentList

> \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetListResponse getDocumentList()

Get a list of all documents. This will return basic information about the document.

Please note that a document is similar to a folder and may contain one or many files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDocumentList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyApi->getDocumentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentGetListResponse**](../Model/LegacyDocumentGetListResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


# Equisoft\SDK\EquisoftConnect\LegacyApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsApiPost**](LegacyApi.md#appsApiPost) | **POST** /apps/api/ | Legacy API entrypoint



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


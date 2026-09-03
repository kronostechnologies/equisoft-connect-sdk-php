# Equisoft\SDK\EquisoftConnect\ExtractionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addExtraction()**](ExtractionApi.md#addExtraction) | **POST** /crm/api/v1/extractions | Add an extraction |


## `addExtraction()`

```php
addExtraction($extractionAddExtractionPayload): \Equisoft\SDK\EquisoftConnect\Model\ExtractionAddExtractionResponse
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
$extractionAddExtractionPayload = new \Equisoft\SDK\EquisoftConnect\Model\ExtractionAddExtractionPayload(); // \Equisoft\SDK\EquisoftConnect\Model\ExtractionAddExtractionPayload

try {
    $result = $apiInstance->addExtraction($extractionAddExtractionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractionApi->addExtraction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extractionAddExtractionPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\ExtractionAddExtractionPayload**](../Model/ExtractionAddExtractionPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\ExtractionAddExtractionResponse**](../Model/ExtractionAddExtractionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

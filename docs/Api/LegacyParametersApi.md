# Equisoft\SDK\EquisoftConnect\LegacyParametersApi

LegacyParameters

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**legacyParametersGet()**](LegacyParametersApi.md#legacyParametersGet) | **GET** /apps/api/kronos.parameters.get | Get the system parameters. |


## `legacyParametersGet()`

```php
legacyParametersGet(): \Equisoft\SDK\EquisoftConnect\Model\LegacyParametersParametersGet
```

Get the system parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->legacyParametersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyParametersApi->legacyParametersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyParametersParametersGet**](../Model/LegacyParametersParametersGet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

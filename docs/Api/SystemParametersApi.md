# Equisoft\SDK\EquisoftConnect\SystemParametersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompanyDetails()**](SystemParametersApi.md#getCompanyDetails) | **GET** /crm/api/v1/system/account/company | Get company information about the enterprise or an alternate company |


## `getCompanyDetails()`

```php
getCompanyDetails($companyId): \Equisoft\SDK\EquisoftConnect\Model\MovementExecutedMovementInfoResponse
```

Get company information about the enterprise or an alternate company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\SystemParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyId = 56; // int | Alternate company id. Leave unspecified for the enterprise

try {
    $result = $apiInstance->getCompanyDetails($companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemParametersApi->getCompanyDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **companyId** | **int**| Alternate company id. Leave unspecified for the enterprise | [optional] |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MovementExecutedMovementInfoResponse**](../Model/MovementExecutedMovementInfoResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

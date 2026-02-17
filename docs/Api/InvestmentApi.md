# Equisoft\SDK\EquisoftConnect\InvestmentApi

Investment

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAsset()**](InvestmentApi.md#getAsset) | **GET** /crm/api/v1/investmentAssets/{id} | Get asset |
| [**getInvestment()**](InvestmentApi.md#getInvestment) | **GET** /crm/api/v1/investmentAccounts/{id} | Get investment |
| [**listInvestmentAssets()**](InvestmentApi.md#listInvestmentAssets) | **GET** /crm/api/v1/investmentAccounts/{id}/assets | List investment assets |


## `getAsset()`

```php
getAsset($id): \Equisoft\SDK\EquisoftConnect\Model\InvestmentsAsset
```

Get asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\InvestmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->getAsset($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InvestmentsAsset**](../Model/InvestmentsAsset.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvestment()`

```php
getInvestment($id): \Equisoft\SDK\EquisoftConnect\Model\InvestmentsAccount
```

Get investment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\InvestmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->getInvestment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentApi->getInvestment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InvestmentsAccount**](../Model/InvestmentsAccount.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvestmentAssets()`

```php
listInvestmentAssets($id): \Equisoft\SDK\EquisoftConnect\Model\InvestmentsListAssetResponse
```

List investment assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\InvestmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->listInvestmentAssets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentApi->listInvestmentAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier. | |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\InvestmentsListAssetResponse**](../Model/InvestmentsListAssetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

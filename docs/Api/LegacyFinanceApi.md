# Equisoft\SDK\EquisoftConnect\LegacyFinanceApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountStatement()**](LegacyFinanceApi.md#getAccountStatement) | **GET** /apps/api/kronos.finance.getAccountStatement | Get Account Statement information for a contact.
[**getLiabilities()**](LegacyFinanceApi.md#getLiabilities) | **GET** /apps/api/kronos.finance.getLiabilities | Get Liabilities information for a contact.


## `getAccountStatement()`

```php
getAccountStatement($contactId, $includeUnmanagedAssets): \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse
```

Get Account Statement information for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 56; // int | Contact Id
$includeUnmanagedAssets = True; // bool | Include unmagned assets, by default false

try {
    $result = $apiInstance->getAccountStatement($contactId, $includeUnmanagedAssets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->getAccountStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **int**| Contact Id |
 **includeUnmanagedAssets** | **bool**| Include unmagned assets, by default false | [optional]

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetAccountStatementResponse**](../Model/LegacyFinanceGetAccountStatementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLiabilities()`

```php
getLiabilities($contactId): \Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse
```

Get Liabilities information for a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\LegacyFinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 56; // int | Contact Id

try {
    $result = $apiInstance->getLiabilities($contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyFinanceApi->getLiabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **int**| Contact Id |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\LegacyFinanceGetLiabilitiesResponse**](../Model/LegacyFinanceGetLiabilitiesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

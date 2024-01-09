# Equisoft\SDK\EquisoftConnect\DSFApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDsfFinancialCenter()**](DSFApi.md#createDsfFinancialCenter) | **POST** /crm/api/v1/dsf/financialCenters | Create a financial center
[**deleteDsfFinancialCenter()**](DSFApi.md#deleteDsfFinancialCenter) | **DELETE** /crm/api/v1/dsf/financialCenters/{financialCenterId} | Delete a financial center
[**getDsfFinancialCenters()**](DSFApi.md#getDsfFinancialCenters) | **GET** /crm/api/v1/dsf/financialCenters/{financialCenterId} | Get a financial center
[**listDsfFinancialCenters()**](DSFApi.md#listDsfFinancialCenters) | **GET** /crm/api/v1/dsf/financialCenters | List all financial centers
[**updateDsfFinancialCenter()**](DSFApi.md#updateDsfFinancialCenter) | **POST** /crm/api/v1/dsf/financialCenters/{financialCenterId} | Update a financial center


## `createDsfFinancialCenter()`

```php
createDsfFinancialCenter($dsfFinancialCenterPayload): \Equisoft\SDK\EquisoftConnect\Model\DsfCreateOrUpdateFinancialCenterResponse
```

Create a financial center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DSFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dsfFinancialCenterPayload = new \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload(); // \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload

try {
    $result = $apiInstance->createDsfFinancialCenter($dsfFinancialCenterPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->createDsfFinancialCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dsfFinancialCenterPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload**](../Model/DsfFinancialCenterPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DsfCreateOrUpdateFinancialCenterResponse**](../Model/DsfCreateOrUpdateFinancialCenterResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDsfFinancialCenter()`

```php
deleteDsfFinancialCenter($financialCenterId)
```

Delete a financial center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DSFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$financialCenterId = 56; // int | Financial center identifier.

try {
    $apiInstance->deleteDsfFinancialCenter($financialCenterId);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->deleteDsfFinancialCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **financialCenterId** | **int**| Financial center identifier. |

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

## `getDsfFinancialCenters()`

```php
getDsfFinancialCenters($financialCenterId): \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenter
```

Get a financial center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DSFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$financialCenterId = 56; // int | Financial center identifier.

try {
    $result = $apiInstance->getDsfFinancialCenters($financialCenterId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->getDsfFinancialCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **financialCenterId** | **int**| Financial center identifier. |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenter**](../Model/DsfFinancialCenter.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDsfFinancialCenters()`

```php
listDsfFinancialCenters(): \Equisoft\SDK\EquisoftConnect\Model\DsfListFinancialCenterResponse
```

List all financial centers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DSFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDsfFinancialCenters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->listDsfFinancialCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DsfListFinancialCenterResponse**](../Model/DsfListFinancialCenterResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDsfFinancialCenter()`

```php
updateDsfFinancialCenter($financialCenterId, $dsfFinancialCenterPayload): \Equisoft\SDK\EquisoftConnect\Model\DsfCreateOrUpdateFinancialCenterResponse
```

Update a financial center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\DSFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$financialCenterId = 56; // int | Financial center identifier.
$dsfFinancialCenterPayload = new \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload(); // \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload

try {
    $result = $apiInstance->updateDsfFinancialCenter($financialCenterId, $dsfFinancialCenterPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->updateDsfFinancialCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **financialCenterId** | **int**| Financial center identifier. |
 **dsfFinancialCenterPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload**](../Model/DsfFinancialCenterPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DsfCreateOrUpdateFinancialCenterResponse**](../Model/DsfCreateOrUpdateFinancialCenterResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Equisoft\SDK\EquisoftConnect\DSFApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDsfFinancialCenter**](DSFApi.md#createDsfFinancialCenter) | **POST** /crm/api/v1/dsf/financialCenters | 
[**deleteDsfFinancialCenter**](DSFApi.md#deleteDsfFinancialCenter) | **DELETE** /crm/api/v1/dsf/financialCenters/{financialCenterId} | 
[**listDsfFinancialCenters**](DSFApi.md#listDsfFinancialCenters) | **GET** /crm/api/v1/dsf/financialCenters | 
[**updateDsfFinancialCenter**](DSFApi.md#updateDsfFinancialCenter) | **POST** /crm/api/v1/dsf/financialCenters/{financialCenterId} | 



## createDsfFinancialCenter

> \Equisoft\SDK\EquisoftConnect\Model\DsfCreateOrUpdateFinancialCenterResponse createDsfFinancialCenter($dsfFinancialCenterPayload)



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
$dsfFinancialCenterPayload = new \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload(); // \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload | 

try {
    $result = $apiInstance->createDsfFinancialCenter($dsfFinancialCenterPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->createDsfFinancialCenter: ', $e->getMessage(), PHP_EOL;
}
?>
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

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteDsfFinancialCenter

> deleteDsfFinancialCenter($financialCenterId)



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
$financialCenterId = 56; // int | 

try {
    $apiInstance->deleteDsfFinancialCenter($financialCenterId);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->deleteDsfFinancialCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **financialCenterId** | **int**|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDsfFinancialCenters

> \Equisoft\SDK\EquisoftConnect\Model\DsfListFinancialCenterResponse listDsfFinancialCenters()



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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DsfListFinancialCenterResponse**](../Model/DsfListFinancialCenterResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDsfFinancialCenter

> \Equisoft\SDK\EquisoftConnect\Model\DsfCreateOrUpdateFinancialCenterResponse updateDsfFinancialCenter($financialCenterId, $dsfFinancialCenterPayload)



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
$financialCenterId = 56; // int | 
$dsfFinancialCenterPayload = new \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload(); // \Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload | 

try {
    $result = $apiInstance->updateDsfFinancialCenter($financialCenterId, $dsfFinancialCenterPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSFApi->updateDsfFinancialCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **financialCenterId** | **int**|  |
 **dsfFinancialCenterPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\DsfFinancialCenterPayload**](../Model/DsfFinancialCenterPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\DsfCreateOrUpdateFinancialCenterResponse**](../Model/DsfCreateOrUpdateFinancialCenterResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


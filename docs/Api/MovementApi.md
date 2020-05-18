# Equisoft\SDK\EquisoftConnect\MovementApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMovement**](MovementApi.md#addMovement) | **POST** /crm/api/v1/movements | 
[**getMovementStatus**](MovementApi.md#getMovementStatus) | **GET** /crm/api/v1/movements/{movementId}/status | 
[**listMovements**](MovementApi.md#listMovements) | **GET** /crm/api/v1/movements | 



## addMovement

> \Equisoft\SDK\EquisoftConnect\Model\MovementAddMovementResponse addMovement($movementMovementPayload)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$movementMovementPayload = new \Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload(); // \Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload | 

try {
    $result = $apiInstance->addMovement($movementMovementPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->addMovement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **movementMovementPayload** | [**\Equisoft\SDK\EquisoftConnect\Model\MovementMovementPayload**](../Model/MovementMovementPayload.md)|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MovementAddMovementResponse**](../Model/MovementAddMovementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMovementStatus

> \Equisoft\SDK\EquisoftConnect\Model\MovementGetStatusResponse getMovementStatus($movementId)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$movementId = 56; // int | 

try {
    $result = $apiInstance->getMovementStatus($movementId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->getMovementStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **movementId** | **int**|  |

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MovementGetStatusResponse**](../Model/MovementGetStatusResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMovements

> \Equisoft\SDK\EquisoftConnect\Model\MovementListMovementResponse listMovements()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftConnect\Api\MovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMovements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MovementApi->listMovements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftConnect\Model\MovementListMovementResponse**](../Model/MovementListMovementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

